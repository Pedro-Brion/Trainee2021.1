function openNav()
{
    var x = document.getElementById("navbar");
    var y = document.getElementById("menu-icon");

    if(x.className === "navbar")
    {
        x.className = "navbar menujs";
        y.innerHTML = "&Cross;"; // mudar para x
    }
    else
    {
        x.className = "navbar";
        y.innerHTML = "&#x1F378; Menu"; // mudar para a taça
    }
}