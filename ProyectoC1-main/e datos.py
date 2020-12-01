import random
f = open("datos.txt", "w")
cafe=int(input("¿Cuantas pruebas de PH hizo hoy?: "))
for x in range(cafe):
    pH=round(random.uniform(0.0,15.0),1)
    f.write(f"{pH}")
    if (x+1) < cafe:
        f.write("\n")
f.close()
