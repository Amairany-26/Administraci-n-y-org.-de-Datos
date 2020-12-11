import os
import csv
datos=[]
def main():
    txt = open("datosCrudos.txt", "r")
    for linea in txt:
        datos.append(linea)
        #print(linea)
    myFile = open('datosCrudos.csv', 'w')
    with myFile:
        writer = csv.writer(myFile)
        writer.writerows(datos)
print("Writing complete")
if __name__ == "__main__":
    main()
