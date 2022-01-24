
function OnSelectionChangeBarre()
{
    var e = document.getElementById("countryCombo");
    var strUser = e.value;
    //alert("/country/"+strUser);
    RedirectTo(strUser);
}

function RedirectTo(input)
{
    window.location.replace("/statistiques/"+input);
}