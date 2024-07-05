# read mode
f = open('new.txt', 'r')
# store the content in file_text variable
file_text = f.read()

# close new.txt
f.close()

# display content 
print(file_text)
