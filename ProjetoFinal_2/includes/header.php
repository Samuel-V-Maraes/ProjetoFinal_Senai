    <style>
        .navbar-custom{
            background:#000;
            padding:10px 30px;
        }

        .navbar-brand img{
            height:60px;
            width:auto;
        }

        .navbar-nav .nav-link{
            color:#fff;
            font-weight:bold;
            letter-spacing:.5px;
            margin-left:20px;
            transition:.3s;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active{
            color:#3fa9f5;
        }

        .navbar-toggler{
            border-color:#fff;
        }

        .navbar-toggler:focus{
            box-shadow:none;
        }

        /* Ajustes para celular */
        @media (max-width:991.98px){

            .navbar-custom{
                padding:10px 15px;
            }

            .navbar-brand img{
                height:50px;
            }

            .navbar-nav{
                text-align:center;
                margin-top:15px;
            }

            .navbar-nav .nav-link{
                margin-left:0;
                padding:12px 0;
            }
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
            <img src="images/logo2.png" alt="Academia Alta Forma">
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuTopo"
                aria-controls="menuTopo"
                aria-expanded="false"
                aria-label="Abrir menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-end" id="menuTopo">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="academia.php">Nossa Academia</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="produtos.php">Nossos Produtos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Fale Conosco</a>
                </li>

            </ul>

        </div>

    </div>
</nav>
