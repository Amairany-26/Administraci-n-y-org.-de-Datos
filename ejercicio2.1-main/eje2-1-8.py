f = open("poem_2.txt", "w")
f.write("When I think about myself, \n") # notice newline
f.write("I almost laugh myself to death.\n") # notice newline
f.close()
f = open("poem_2.txt", "r") # open the file again
data = f.read() # read the entire file
print(data)
