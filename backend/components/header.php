<header class="header" style="position:relative;">
    <div class="flex justify-center">
        <img src="https://cdn.discordapp.com/attachments/954913304944451645/1128153871580143646/logo.png">
    </div>
    <div class="header-nav">
        <div class="flex items-center">
            <a class="header-nav-link" href="">
                <i class="fa-solid fa-house"></i>
                Home
            </a>
            <a class="header-nav-link" href="">
                <i class="fa-solid fa-info"></i>
                Rules
            </a>
            <a class="header-nav-link" href="">
                <i class="fa-solid fa-users"></i>
                Member List
            </a>
            <a class="header-nav-link" href="">
                <i class="fa-solid fa-magnifying-glass"></i>
                Search
            </a>
            <a class="header-nav-link" href="">
                <i class="fa-solid fa-exclamation"></i>
                Upgrade
            </a>
            <a class="header-nav-link" href="">
                <i class="fa-sharp fa-solid fa-comment"></i>
                Discord
            </a>
            <a class="header-nav-link" href="">
                <i class="fa-solid fa-circle-question"></i>
                Misc
            </a>
        </div>

        <div style="gap: 20px" class="flex items-center">
            <div class="dropdown" onmouseleave="dropdownLeave(this)" onmouseover="dropdownHover(this)" style="padding: 13.5px 15px;">
                <h5>
                    Username faaa
                </h5>

                <div class="dropdown-items" style="display: none;">
                    <div style="background-color: var(--accent); width: 100%; padding: 2.5px;"></div>
                    <div class="dropdown-links" style="padding: 10px 0px;">
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa-solid fa-user"></i>
                            My Profile
                        </a>
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            2 Factor Authentication
                        </a>
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa-solid fa-lock"></i>
                            Country Lock
                        </a>
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa-solid fa-list"></i>
                            Login Logs
                        </a>
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa-sharp fa-solid fa-comments"></i>
                            View My Posts
                        </a>
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            View My Threads
                        </a>
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa-solid fa-users"></i>
                            Open Buddy List
                        </a>
                        <a style="display: flex; gap: 10px; font-size: .8rem; align-items: center; padding: 10px;" href="">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
            <a>
                <i class="fa-solid fa-gear"></i>
            </a>
            <a>
                <i class="fa-solid fa-envelope"></i>
            </a>
            <a>
                <i class="fa-solid fa-bell"></i>
            </a>
        </div>
    </div>
</header>

<script>
    const dropdownHover = (e) => {
        const dropdown_links = e.children[1]

        dropdown_links.style.display = "block"
        dropdown_links.style.transition = "opacity 200ms ease"

        setTimeout(() => {
            dropdown_links.style.opacity = "1"
        }, 200)
    }

    const dropdownLeave = (e) => {
        const dropdown_links = e.children[1]
        dropdown_links.style.transition = "opacity 200ms ease-in-out"
        dropdown_links.style.opacity = "0"

        setTimeout(() => {
            dropdown_links.style.display = "none"
        }, 200)
    }
</script>