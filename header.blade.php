{{-- Location: resources > views --}}

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg px-4 py-3 sticky-top fixed-top shadow" style="background-color: green">
    <div class="container-fluid">
        <a class="navbar-brand fs-5 mx-2 d-flex align-items-center justify-content-center text-light fw-bold" href="/">
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/herbalife-new-logo-2023-design-template-f5ad1a4fc23908bb5718ec8cc6c91054_screen.jpg" alt=""
                width="65" style="border-radius:55%;" class="px-2">PPM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active fs-5 text-white" aria-current="page" href="/">Home</a>
                <a class="nav-link fs-5 text-white" href="/kegiatan-warga">Kegiatan Warga</a>
            </div>
            <div class="navbar-nav float-right">
                <a href="{{ route('login') }}" target="_blank" class="d-flex align-items-center text-white"><i
                        class="fa-solid fa-user fa-xl mx-2" style="color: white;"></i>Login</a>
            </div>
        </div>
    </div>
</nav>
{{-- NAVBAR --}}
