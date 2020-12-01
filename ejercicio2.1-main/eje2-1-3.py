f = open("poem.txt", "r")
print("1:",f.readlines())
print("2:",f.readlines()) # EOF reached
f.close()
