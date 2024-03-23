<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Lisboa Otel</title>

    <meta name="keywords"
        content="Gordon Resort Hotel Abraka, About Gordon Resort Hotel, McCarthy Beach, Beaches in Delta state, Beaches in Nigeria, beaches in Africa, beaches near me" />
    <meta name="description"
        content=" About Us - Gordon Resort Hotel popularly known as McCarthy Beach is located in the University town of Abraka in Delta State. It is famous for its Natural white sandy Beach and serene environment." />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C1EVRTK6PD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-C1EVRTK6PD");
    </script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NSMS76N");
    </script>
    <!-- End Google Tag Manager -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/media/favicon.png" type="image/x-icon" />

    <!-- Favicon -->
    <script src="https://kit.fontawesome.com/344589b924.js" crossorigin="anonymous"></script>

    <!-- Semantic UI CDN -->
    <link
        href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script
        src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js">
    </script>
    <style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSMS76N" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header Navigation --> 
    <?php include "app/Views/parts/_header.php"?>

    <!-- header finish -->


    <br><br>
    <section class="vh-100" style="margin-top:100px">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://kirkayaksurucukursu.com/wp-content/uploads/2023/01/gaziantep-kirkayak-surucu-kursu-otobus-araclarimiz-gaziantep-otobus-ehliyet-gaziantep-d1-ehliyet-gaziantep-d-sinifi-ehliyet-gaziantep-d-ehliyeti-hangi-araclari-kullanir.png"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="./loginislem">


                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Giriş Yap</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-lg"
                                placeholder="Email" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                placeholder="Şifre" />

                        </div>
                        <div class="row">
                            <div class="col-md-12" style="text-align:center;">

                                <?php if (@$_GET["durum"] == "no") { ?>
                                <div class="alert bg-danger" id="successAlert">
                                    <b style="color:aliceblue">Kullanıcı adı veya şifre yanlış</b>
                                </div>

                                <script>
                                setTimeout(function() {
                                    document.getElementById("successAlert").style.display = "none";
                                }, 2000); // 3 saniye sonra mesaj kutusunu gizle
                                </script>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->

                            <a href="#!" class="text-body">Şifremi Unuttum?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input type="submit" class="btn btn-primary btn-lg" value="Giriş Yap"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Hesabın yok mu? <a href="./register"
                                    class="link-danger">Kayıt Ol</a></p>
                        </div>

                    </form>


                </div>

            </div>
        </div>
        </div>


    </section>

    <!-- Cookies -->
    <?php include "app/Views/parts/_cookies.php"?>
    <!-- Cookies End -->
    <!-- Footer -->
    <?php include "app/Views/parts/_footer.php"?>
    <!-- Footer End -->

    <!-- Back to top button -->
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JS -->
    <script src="./assets/js/index.js"></script>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>