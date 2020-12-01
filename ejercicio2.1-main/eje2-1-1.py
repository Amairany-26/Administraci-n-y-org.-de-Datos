f = open("poem.txt", "r")

print("1:",f.read(2)) # lee los primeros 3 caracteres
print("2:",f.read()) # leer los caracteres restantes en el archivo.
print("3:",f.read()) # se alcanza el final del archivo (EOF)
f.close()
