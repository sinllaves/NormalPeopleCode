
#continue

# Prints all letters except 'e' and 's'
for letter in 'geeksforgeeks':
    if letter == 'e' or letter == 's':
        continue
    print('Current Letter :', letter)





#Break

for letter in 'geeksforgeeks':

    # break the loop as soon it sees 'e'
    # or 's'
    if letter == 'e' or letter == 's':
        break

print('Current Letter :', letter)


# Current Letter : e






#RangeFunctions

# printing a number
for i in range(10):
    print(i, end=" ")
print()


# using range for iteration
l = [10, 20, 30, 40]
for i in range(len(l)):
    print(l[i], end=" ")
print()


# performing sum of first 10 numbers
sum = 0
for i in range(1, 10):
    sum = sum + i
print("Sum of first 10 numbers :", sum)


#OUTPUT
# 0 1 2 3 4 5 6 7 8 9
# 10 20 30 40
# Sum of first 10 numbers : 45




# for loop with else

