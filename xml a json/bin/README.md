*
*
*
*
*
Implementar una plataforma que transforme los .xml del portal https://portal.gdc.cancer.gov/cart, en un modo para que el usuario tenga la facilidad de manejo de datos. Así, las consultas de datos sea más eficiente para el usuario.
*
*
*
*
*************
***********
*********
******

La ejecución de la aplicación hace de la siguiente manera:

Entra a la carpeta bin/targs:
	$ cd /Documents/bin

Revisar si tenemos mkfile, y escribimos esto:
	$ less mkfile

Ya teniendo el archivo entramos al targets
	$ bin/targets

Escribimos ya por último el código para que los .xlm se conviertan a .json
	$ bin/targets | xargs mk

Listo aquí, los archivos .xlm ya que dan como .json    

