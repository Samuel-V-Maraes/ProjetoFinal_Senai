
/*
 * Validação do formulário "Fale Conosco" (Alta Forma).
 *
 * Casa com o HTML real: form sem id próprio (selecionado por .form-af),
 * inputs com id/name = nome, email, telefone, assunto, mensagem.
 *
 * Estratégia:
 * 1. VALIDATORS é a única fonte de verdade das regras por campo.
 * 2. validateField() é genérica: descobre o campo pelo atributo "name"
 *    e aplica a classe/estilo do Bootstrap (is-invalid / is-valid).
 * 3. Mesma função roda no "blur" (tempo real) e no "submit".
 * 4. Regex compiladas uma única vez, fora da função.
 */
 
document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(".form-af");
  if (!form) return; // segurança: se o form não existir na página, não faz nada
 
  const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const PHONE_RE = /^\(?\d{2}\)?\s?9?\d{4}-?\d{4}$/;
 
  // MASKS: uma função por campo que precisa de formatação em tempo real.
  // Só telefone precisa aqui; se um campo não tiver máscara, o input
  // segue digitando livre, sem transformação nenhuma.
  const MASKS = {
    telefone: (v) => {
      let digits = v.replace(/\D/g, "").slice(0, 11); // só números, máx. 11 dígitos (DDD + 9 dígitos)
 
      if (digits.length > 10) {
        // celular: (99) 99999-9999
        digits = digits.replace(/^(\d{2})(\d{5})(\d{0,4})/, "($1) $2-$3");
      } else if (digits.length > 6) {
        // fixo: (99) 9999-9999
        digits = digits.replace(/^(\d{2})(\d{4})(\d{0,4})/, "($1) $2-$3");
      } else if (digits.length > 2) {
        digits = digits.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
      } else if (digits.length > 0) {
        digits = digits.replace(/^(\d{0,2})/, "($1");
      }
      return digits;
    },
  };
 
  // Aplica a máscara do campo (se existir), mantendo o cursor no fim.
  // Evita loop infinito comparando se o valor realmente mudou.
  function applyMask(input) {
    const mask = MASKS[input.name];
    if (!mask) return;
    const masked = mask(input.value);
    if (masked !== input.value) input.value = masked;
  }
 
  const VALIDATORS = {
    nome: (v) => {
      if (!v.trim()) return "Informe seu nome completo.";
      if (v.trim().split(/\s+/).length < 2) return "Informe nome e sobrenome.";
      return null;
    },
    email: (v) => {
      if (!v.trim()) return "Informe seu e-mail.";
      if (!EMAIL_RE.test(v.trim())) return "E-mail inválido.";
      return null;
    },
    telefone: (v) => {
      if (!v.trim()) return "Informe seu telefone.";
      if (!PHONE_RE.test(v.trim())) return "Telefone inválido. Ex: (19) 90000-0000";
      return null;
    },
    assunto: (v) => {
      if (!v.trim()) return "Informe o assunto.";
      if (v.trim().length < 3) return "Assunto muito curto.";
      return null;
    },
    mensagem: (v) => {
      if (!v.trim()) return "Escreva sua mensagem.";
      if (v.trim().length < 10) return "Mensagem muito curta (mín. 10 caracteres).";
      return null;
    },
  };
 
  // Garante que cada input tenha uma div .invalid-feedback logo depois dele,
  // mesmo que o PHP ainda não tenha sido atualizado com elas manualmente.
  function ensureFeedbackEl(input) {
    let feedback = input.nextElementSibling;
    if (!feedback || !feedback.classList.contains("invalid-feedback")) {
      feedback = document.createElement("div");
      feedback.className = "invalid-feedback";
      input.insertAdjacentElement("afterend", feedback);
    }
    return feedback;
  }
 
  function validateField(input) {
    const validator = VALIDATORS[input.name];
    if (!validator) return true; // campo sem regra definida, ignora
 
    const feedback = ensureFeedbackEl(input);
    const errorText = validator(input.value);
 
    input.classList.toggle("is-invalid", !!errorText);
    input.classList.toggle("is-valid", !errorText);
    feedback.textContent = errorText || "";
 
    return !errorText;
  }
 
  const fields = form.querySelectorAll("[name]");
  const successMessage = document.getElementById("formSuccess");

  fields.forEach((input) => {
    input.addEventListener("blur", () => validateField(input));
    input.addEventListener("input", () => {
      applyMask(input);
      if (input.classList.contains("is-invalid")) validateField(input);
      // esconde a mensagem de sucesso assim que o usuário volta a digitar
      successMessage?.setAttribute("hidden", "");
    });
  });
 
  form.addEventListener("submit", (e) => {
    e.preventDefault();
 
    const allValid = [...fields]
      .map((input) => validateField(input))
      .every(Boolean);
 
    if (allValid) {
      // Envio real: fetch/AJAX ou form.submit() para o PHP de processamento
      // fetch('processar-contato.php', { method: 'POST', body: new FormData(form) })
      form.reset();
      fields.forEach((f) => f.classList.remove("is-valid"));

      if (successMessage) {
        successMessage.removeAttribute("hidden");
        successMessage.scrollIntoView({ behavior: "smooth", block: "nearest" });
      }
    } else {
      successMessage?.setAttribute("hidden", "");
      form.querySelector(".is-invalid")?.focus();
    }
  });
});
 
