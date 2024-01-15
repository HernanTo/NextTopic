$(document).ready(()=>{
    var stateMenu = false;
    document.getElementById('photo__profile').addEventListener('click', event => {
        if(!stateMenu){
            $('#menu__header').addClass('menu__header__show');
            stateMenu = !stateMenu;
        }else{
            $('#menu__header').removeClass('menu__header__show');
            stateMenu = !stateMenu;
        }
    });
});
