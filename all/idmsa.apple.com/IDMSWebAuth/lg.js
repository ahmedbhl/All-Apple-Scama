
function changeLanguage(){



var e = document.getElementById("languageCode");
var strUser = e.options[e.selectedIndex].text;

if(strUser=="Français")
{
document.getElementById("label6").innerHTML= "Identifiant Apple" ;
document.getElementById("label7").innerHTML= "Mot de passe" ;
document.getElementById("appleIdURL").innerHTML= "Identifiant Apple oublié ?" ;
document.getElementById("passwordURL").innerHTML= "Mot de passe oublié ?" ;
document.getElementById("signInHyperLink").value= "Connexion" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=FR-FR">Créer un identifiant Apple.</a>' ;
}
else if(strUser=="English")
{
document.getElementById("label6").innerHTML= "Apple ID" ;
document.getElementById("label7").innerHTML= "Password" ;
document.getElementById("appleIdURL").innerHTML= "Forgot your Apple ID?" ;
document.getElementById("passwordURL").innerHTML= "Forgot your password?" ;
document.getElementById("signInHyperLink").value= "Sign In" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=US-EN">Create an Apple ID</a>' ;
}
else if(strUser=="Deutsch")
{
document.getElementById("label6").innerHTML= "Apple-ID" ;
document.getElementById("label7").innerHTML= "Passwort" ;
document.getElementById("appleIdURL").innerHTML= "Apple-ID vergessen?" ;
document.getElementById("passwordURL").innerHTML= "Passwort vergessen?" ;
document.getElementById("signInHyperLink").value= "Anmelden" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=DE-DE">Apple ID erstellen</a>' ;
}
else if(strUser=="Espagnol")
{
document.getElementById("label6").innerHTML= "ID de Apple" ;
document.getElementById("label7").innerHTML= "Contraseña" ;
document.getElementById("appleIdURL").innerHTML= "¿Has olvidado tu ID de Apple?" ;
document.getElementById("passwordURL").innerHTML= "¿Has olvidado tu contraseña?" ;
document.getElementById("signInHyperLink").value= "Iniciar sesión" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=ES-ES">Crear un ID de Apple</a>' ;
}
else if(strUser=="Italiano")
{
document.getElementById("label6").innerHTML= "ID Apple" ;
document.getElementById("label7").innerHTML= "Password" ;
document.getElementById("appleIdURL").innerHTML= "Hai dimenticato il tuo ID Apple?" ;
document.getElementById("passwordURL").innerHTML= "Hai dimenticato la password?" ;
document.getElementById("signInHyperLink").value= "Accedi" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=IT-IT">Crea un Apple ID</a>' ;
}


else if(strUser=="日本語")
{
document.getElementById("label6").innerHTML= "Apple ID" ;
document.getElementById("label7").innerHTML= "パスワード" ;
document.getElementById("appleIdURL").innerHTML= "Apple ID をお忘れの場合" ;
document.getElementById("passwordURL").innerHTML= "パスワードをお忘れの場合" ;
document.getElementById("signInHyperLink").value= "サインイン" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=JP-JA">Apple ID の作成</a>' ;
}


else if(strUser=="한국어")
{
document.getElementById("label6").innerHTML= "Apple ID" ;
document.getElementById("label7").innerHTML= "암호" ;
document.getElementById("appleIdURL").innerHTML= "Apple ID를 잊어버리셨습니까?" ;
document.getElementById("passwordURL").innerHTML= "암호를 잊으셨습니까?" ;
document.getElementById("signInHyperLink").value= "로그인" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=KP-KO">Apple ID 만들기</a>' ;
}
else if(strUser=="繁體中文")
{
document.getElementById("label6").innerHTML= "Apple ID" ;
document.getElementById("label7").innerHTML= "密碼" ;
document.getElementById("appleIdURL").innerHTML= "忘了您的 Apple ID？" ;
document.getElementById("passwordURL").innerHTML= "忘記密碼？" ;
document.getElementById("signInHyperLink").value= "登入" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=TW-ZH">建立 Apple ID</a>' ;
}
else if(strUser=="简体中文")
{
document.getElementById("label6").innerHTML= "Apple ID" ;
document.getElementById("label7").innerHTML= "密码" ;
document.getElementById("appleIdURL").innerHTML= "忘记了 Apple ID？" ;
document.getElementById("passwordURL").innerHTML= "忘记了密码？" ;
document.getElementById("signInHyperLink").value= "登录" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=CN-ZH">建立Apple ID</a>' ;
}
else if(strUser=="Portuguais do Brasil")
{
document.getElementById("label6").innerHTML= "ID Apple" ;
document.getElementById("label7").innerHTML= "Senha" ;
document.getElementById("appleIdURL").innerHTML= "Esqueceu seu ID Apple?" ;
document.getElementById("passwordURL").innerHTML= "Esqueceu sua senha?" ;
document.getElementById("signInHyperLink").value= "Iniciar sessão" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=BR-PT">Criar uma ID Apple</a>' ;
}
else if(strUser=="Русский")
{
document.getElementById("label6").innerHTML= "Apple ID" ;
document.getElementById("label7").innerHTML= "Пароль" ;
document.getElementById("appleIdURL").innerHTML= "Забыли свой Apple ID?" ;
document.getElementById("passwordURL").innerHTML= "Забыли пароль?" ;
document.getElementById("signInHyperLink").value= "Войти" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=RU-RU">Создать идентификатор Apple ID</a>' ;
}
else if(strUser=="Turkche")
{
document.getElementById("label6").innerHTML= "Apple Kimliği" ;
document.getElementById("label7").innerHTML= "Parola" ;
document.getElementById("appleIdURL").innerHTML= "Apple Kimliğinizi mi unuttunuz?" ;
document.getElementById("passwordURL").innerHTML= "Parolanızı mı unuttunuz?" ;
document.getElementById("signInHyperLink").value= "Giriş Yap" ;
document.getElementById("create_apple_id").innerHTML= '<a href="https://id.apple.com/IDMSAccount/myAccount.html?appIdKey=45571f444c4f547116bfd052461b0b3ab1bc2b445a72138157ea8c5c82fed623&amp;action=register&amp;language=TR-TR">Apple Kimliği oluşturun</a>' ;
}
}


