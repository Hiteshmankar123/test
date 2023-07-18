# Task 1: Sum of Numbers
def sum_of_numbers(numbers):
    return sum(numbers)


# Task 2: Factorial
def factorial(n):
    if n == 0:
        return 1
    else:
        return n * factorial(n - 1)


# Task 3: Reversing a String
def reverse_string(string):
    return string[::-1]


# Task 4: Count Words in a Sentence
def count_words(sentence):
    words = sentence.split()
    return len(words)


# Task 5: Finding the Maximum Number in a List
def find_maximum(numbers):
    return max(numbers)


# Task 6: Checking if a Number is Prime
def is_prime(n):
    if n < 2:
        return False
    for i in range(2, int(n ** 0.5) + 1):
        if n % i == 0:
            return False
    return True


# Task 7: Fibonacci Sequence
def fibonacci(n):
    sequence = [0, 1]
    for i in range(2, n):
        next_number = sequence[i - 1] + sequence[i - 2]
        sequence.append(next_number)
    return sequence


# Testing the functions
numbers = [1, 2, 3, 4, 5]
print("Sum of numbers:", sum_of_numbers(numbers))

n = 5
print("Factorial of", n, ":", factorial(n))

string = "Hello, World!"
print("Reversed string:", reverse_string(string))

sentence = "This is a sample sentence."
print("Number of words:", count_words(sentence))

numbers = [3, 9, 1, 5, 7]
print("Maximum number:", find_maximum(numbers))

n = 17
print(n, "is prime:", is_prime(n))

n = 10
print("Fibonacci sequence of length", n, ":", fibonacci(n))
