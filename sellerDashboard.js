
function redirectToLink() {
    var targetLink = "add_dashboard.php";
    window.location.href = targetLink;
}


var addPropertyCard = document.getElementById("addPropertyCard");

addPropertyCard.addEventListener("click", redirectToLink);
