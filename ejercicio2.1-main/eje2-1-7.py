f = open("poem_2.txt", "w")

f.write("When I think myself, ")
f.write("I almost laugh myself to death.")
f.close() # close he file and flush the data in the buffer to the disk
f = open("poem_2.txt", "r") # open the file for reading
data = f.read() # read entire file
print(data)
f.close()
