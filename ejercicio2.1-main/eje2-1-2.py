f = open("poem.txt", "r")
print("1:",f.read(4)) # lee los priemeros 4 caracteres
print("2:",f.readline()) # leer hasta llegar al final de la linea
print("3:",f.readline()) # lee la segunda linea
print("4:",f.readline()) # lee la tercera linea
print("5:",f.readline()) # lee la cuarta linea
print("6:",f.readline()) # EOF alcanzado
f.close()
