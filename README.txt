Version php=8.2.4
Version mysql=MariaDB 10.4.28

Ce site est un blog a plusieurs theme avec un coté administrateur et un coté utilisateur.

Pour demenager le site vous devrez changer les constants de connexion a phpMyadmin (qui sont username=root et password= '' dans mon projet)
 dans les 2 fichiers nommée "constants" pour mettre celui qui correspond au votre. 
le premier fichier "constants" est directement dans le fichier config lorsque vous ouvrez le fichier du projet et le second est dans le fichier config 
sous le repertoire admin.

Aussi le fichier doit etre placé dans le serveur (Xammp) avec le nom "WE4A_TONTSA_SOLO" sinon il faudra changer la constant ROOT_URL dans les deux fichiers
constants pour mettre le nom du fichier avec lequel l'avez placé dans votre serveur local. 

voici les identifiants qu quelques utilisateur dans la base de donnée que vous pourrai utilisé pour tester la base de donnée
J'ai codé le site en anglais car je suis d'un background anglophone et je suis plus a l'aise en anglais. 

admin:
frankapala@gmail.com
mot de passe: frankapala75

user 1
username:karlheinz@gmail.com
password:karlheinz

user 2
username: loice@gmail.com
password: loicedelaney

user 3
username:helena@gmail.com
password: helenajoyce
