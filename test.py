import random

# Initialize an empty 2D array with 6 rows and 4 columns
table = [[0 for j in range(4)] for i in range(6)]

# Fill the first column of the first 3 rows with alternating values of 1 and 3
for i in range(3):
    table[i][0] = 1 if i % 2 == 0 else 3

# Generate a random integer between 1 and 9 (inclusive) and store it in a variable
rand_num = random.randint(1, 9)

# Fill the second column of the first row with the random integer generated in step 3
table[0][1] = rand_num

# Concatenate the random integer generated in step 3 with itself and store it in a variable
concat_num = str(rand_num) + str(rand_num)

# Fill the second column of the second row with the value generated in step 5
table[1][1] = int(concat_num)

# Fill the second column of the third row with the value generated in step 3
table[2][1] = rand_num

# Fill the third column of the first 4 rows with the string "one-two-three"
for i in range(4):
    table[i][2] = "one-two-three"

# Fill the fourth column of the first 2 rows with the string "A-B"
for i in range(2):
    table[i][3] = "A-B"

# Fill the fourth column of the last 4 rows with alternating values of 6 and 5
for i in range(2, 6):
    table[i][3] = 6 if i % 2 == 0 else 5

# Fill the third column of the last row with the sum of the values in the third column of the first 5 rows
table[5][2] = sum([table[i][2] for i in range(5)])

# Print the table
for row in table:
    print(row)