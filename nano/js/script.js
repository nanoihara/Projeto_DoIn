localStorage.setItem('theme', 'dark'); 

//acessado o tema da maquina do usuário
localStorage.getItem('theme'); 

const toggle = document.getElementById("toggle");
const theme = window.localStorage.getItem("theme");

/* verifica se o tema armazenado no localStorage é escuro
se sim aplica o tema escuro ao body */
if (theme === "dark") document.body.classList.add("dark");

// event listener para quando o botão de alterar o tema for clicado
toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    if (theme === "dark") {
        window.localStorage.setItem("theme", "light");
        localStorage.currentTheme = "light";
    } else window.localStorage.setItem("theme", "dark"); localStorage.currentTheme = "dark";
});

/*https://dev.to/rubalaine/dark-mode-apenas-com-html-css-e-javascript-3n57 
https://www.w3schools.com/howto/howto_css_switch.asp*/