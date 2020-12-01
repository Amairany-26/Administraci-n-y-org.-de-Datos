# creacion de un archivo binario

print("creacion de un archivo binario")

# ponemos nombre al archivo que se vamos a crear
# la extension .bin es opcional puede ser culquiera o ninguna
nombreArchivo = 'textoBinario.bin'

# creamos una lista de numeros cualquiera
# seran los datos que escribiremos en el archivo
# pero de forma binaria
numeros = [10, 2, 31, 4, 1]

# El método bytes() devuelve un objeto en bytes
# con los datos dados
# con esto convertimos nuestros datos a binario
# recuerda que un archivo binario contiene bytes
objetoByte = bytes(numeros)

# abrimos el archivo, recuerda que el modo w
# lo sobreescribe si ya existiera
# la 'b' es para decirle que será binario el archivo
archivo = open(nombreArchivo, 'wb')

# escribimos en el archivo los bytes
archivo.write(objetoByte)

# cerramos el archivo
archivo.close()
print('El programa terminó')
