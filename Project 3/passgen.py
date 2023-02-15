import string
import random

# characters to generate password from
upper_alphabets = list(string.ascii_uppercase)
lower_alphabets = list(string.ascii_lowercase)
digits = list(string.digits)
special_characters = list("!@#$%^&*()")
characters = list(string.ascii_letters + string.digits + "!@#$%^&*()")


def generate_random_password():
    # length of password from the user
    length = 8  # int(input("Enter password length: "))

    # number of character types
    upper_letters_count = 2  # int(input("Enter uppercase alphabets count in password: "))
    lower_letters_count = 2  # int(input("Enter lowercase alphabets count in password: "))
    digits_count = 2  # int(input("Enter digits count in password: "))
    special_characters_count = 2  # int(input("Enter special characters count in password: "))

    characters_count = upper_letters_count + lower_letters_count + digits_count + special_characters_count

    # check the total length with characters sum count
    # print not valid if the sum is greater than length
    if characters_count > length:
        print("Characters total count is greater than the password length")
        return

    # initializing the password
    password = []

    # picking 2 random uppercase letters
    for i in range(upper_letters_count):
        password.append(random.choice(upper_alphabets))

    # picking 2 random lowercase letters
    for i in range(lower_letters_count):
        password.append(random.choice(lower_alphabets))

    # picking 2 random digits
    for i in range(digits_count):
        password.append(random.choice(digits))

    # picking 2 random alphabets
    for i in range(special_characters_count):
        password.append(random.choice(special_characters))

    # if the total characters count is less than the password length
    # add random characters to make it equal to the length
    if characters_count < length:
        random.shuffle(characters)
        for i in range(length - characters_count):
            password.append(random.choice(characters))

    # shuffling the resultant password
    random.shuffle(password)

    # converting the list to string
    # printing the list
    print("Want strong password, You can use this random password: ")
    print("".join(password))


# invoking the function
generate_random_password()
