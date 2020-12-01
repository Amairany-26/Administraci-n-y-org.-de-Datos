f = open("poem_2.txt", "w")
print("When I think about myself, ", file=f)
print("I almost laugh myself to death.", file=f)
f.close()
f = open("poem_2.txt", "r") # open the file again
data = f.read()
print(data)
