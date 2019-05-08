function confirmeSair() {
    if (confirm('Deseja realmente sair do sistema?')) {
        window.location.href = "logout.php";
    } else {
        return false;
    }
}
