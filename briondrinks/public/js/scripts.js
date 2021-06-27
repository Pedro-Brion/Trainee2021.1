function openNav()
{
    var x = document.getElementById("navbar");
    var y = document.getElementById("menu-icon");
     if(!x.classList.contains("menujs"))
     {
         x.className = "navbar cor-navbar menujs";
         y.innerHTML = "&Cross;"; // mudar para x
     }
    else
    {
        x.className = "navbar cor-navbar";
        y.innerHTML = "&#x1F378; Menu"; // mudar para a taça
    }
}