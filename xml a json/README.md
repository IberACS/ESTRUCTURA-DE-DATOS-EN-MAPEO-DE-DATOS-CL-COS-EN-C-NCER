*****
***
*
Para crear una base de datos del portal https://portal.gdc.cancer.gov/cart, que está los archivos en .xml. Necesitamos convertirlos a .json para facilitar la carga de datos para esto hacemos una conversión masiva de .xml a json. Para esto implementamos lo siguiente.

Verificar si ya tenemos instalados los programas requeridos y escribimos:

	$ apt search xml etree
	$ apt search python xml
 
Instalamos 

	$ pip install https://github.com/hay/xml2json/zipball/master

	$ pip install --upgrade pip

	$ sudo apt install python-pip ipython

	$ sudo apt install 9base


La carpeta que estamos utilizando para nuestro proyecto. Utilizamos un editor de textos, el archivo con el nombre de mkfile. Así, que quedará para la conversión.

	$ python -m json.tool nationwidechildrens.org_clinical.TCGA-S2-AA1A.json > nationwidechildrens.org_clinical.TCGA-S2-AA1A.json.2

Como queremos hacer la conversión masivo, también en la carpeta que estamos utilizando se crea otra carpeta con el nombre de bin/ y ahí creamos un archivo targets. Para quesea utilizado con la aplicación Xargs. Ya con esto damos permisos y corremos la aplicación.


	$ sudo chmod +x bin/targets

	$ bin/targets | less

	$ sh bin/targets

	$ bin/targets | xargs mk




