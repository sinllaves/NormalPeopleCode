# recursion function
def new_recursion(n):
    if(n>0):
        result = n + new_recursion(n-1)
        print(result)
    else:
        result = 0
    return result

print("\n\n recursion results")
new_recursion(8)
        