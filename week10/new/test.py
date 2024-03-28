def decode(message_file):
    # Read the file and split it into lines
    with open(message_file, 'r') as file:
        lines = file.readlines()

    # Create a dictionary to hold the number-word pairs
    number_word_dict = {}
    for line in lines:
        number, word = line.split()
        number_word_dict[int(number)] = word

    # Create a list to hold the words of the decoded message
    decoded_message = []
    # The pyramid starts with 1 and increases by 1 each line
    step = 1
    while step in number_word_dict:
        decoded_message.append(number_word_dict[step])
        step += 1

    # Join the words to form the decoded message string
    return ' '.join(decoded_message)

decoded_message = decode('/Users/RYANBURNSXPS15/Documents/code/ist263/ist263/week10/new/coding_qual_input.txt')
print(decoded_message)