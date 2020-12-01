f = open("poem_2.txt", "a")
f.write("\nAlone, all alone. Nobody, but nobody. Can make it out here alone.")
f.close()
data = open("poem_2.txt").read()

print(data)
