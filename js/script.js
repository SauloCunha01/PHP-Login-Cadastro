// Recupera os valores de nome de usuário e senha
const username = document.getElementById('inputEmail').value;
const password = document.getElementById('inputPassword').value;

// Verifica se o botão "Lembrar de mim" está marcado
const rememberMe = document.getElementById('remember-me').checked;

// Se o botão "Lembrar de mim" estiver marcado, salva os valores do nome de usuário e senha em um cookie
if (rememberMe) {
  document.cookie = `username=${username}; password=${password}; expires=Sun, 12 Apr 2024 12:00:00 UTC; path=/`;
}
