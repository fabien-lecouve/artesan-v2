<aside class="layout__sidebar sidebar">

    <div class="sidebar__top">
        <div class="sidebar__brand">
            <a href="/" class="sidebar__home-link">
                <img class="sidebar__logo" src="images/logo_blanc.png" alt="Artesan">
            </a>
        </div>
        <nav class="sidebar__nav">
            <ul class="sidebar__list">
                <li>
                    <a class="link" href="">
                        <i class="link__icon fa-solid fa-person-digging"></i>
                        <span class="link__text">Chantiers</span>
                    </a>
                </li>
                <li>
                    <a class="link" href="">
                        <i class="link__icon fa-regular fa-file-lines"></i>
                        <span class="link__text">Devis</span>
                    </a>
                </li>
                <li>
                    <a class="link" href="">
                        <i class="link__icon fa-solid fa-euro-sign"></i>
                        <span class="link__text">Factures</span>
                    </a>
                </li>
                <li>
                    <a class="link" href="">
                        <i class="link__icon fa-solid fa-calculator"></i>
                        <span class="link__text">Finances</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="sidebar__bottom">
        <span class="link__text">{{ auth()->user()->firstname }}</span>
        <form method="POST" action="/logout">
            @csrf
            <button class="link__text" type="submit">Se déconnecter</button>
        </form>
    </div>

</aside>
