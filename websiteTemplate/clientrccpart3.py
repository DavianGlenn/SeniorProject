#File name: clientRRC_pt2.py
#Writtenb by: Alexis Cooper and Bria Massey
#Assignment Name: Roman Reverse Captcha Stage 2
#Purpose: AI has flagged current session as suspicious, evaluate the given expressions

import sys, time
from socket import *
from operator import add
# Get the server hostname and port as command line arguments
host = '152.8.114.62' 	# ping the website ans1.ncat.edu to find IP
port = 8002		# specified port for Elizabeth and James B. to communicate

counter = 1 # counter counts number of pings



#send TCP packet
client_socket = socket(AF_INET, SOCK_STREAM)
client_socket.connect((host,port))
#create TCP messages
message1 = b'16\n'  			# 4 * 4
message2 = b'65536\n'			# 256 * 256
message3 = b'4194304\n'		# 2048 * 2048
addr = (host, port)

data = client_socket.recv(1024)

#send all the messages at once
client_socket.send(message1)
client_socket.send(message2)
client_socket.send(message3)

################################################################
# Roman Reverse Captcha 2 requires the listening to continue

#use for loop to gather all information from the robot to solve the flag
for listen in range (3):
	if client_socket.recv(1024) != 0:	# while data is being sent recv the data
		data = client_socket.recv(1024)

print (data) #used to determine the how to separate data for calculation

#create all necessary lists

add1 = []
add2 = []
add3 = []


#every summation is split into its own list
for a in data:
	add1= data.split(b'\n>')[0]
	add2= data.split(b'\n>')[1]
	add3= data.split(b'\n>')[2]

print (add1+ add2+ add3)	#ensure split has been preformed correctly

#separate each summation into individal integers by removing the a space as the delimeter
#each summation will be a list of size 4
#the first and third items within the list (starting at 0) are found


##### Summation #1 ####
for j in add1:
	#print(add1.split(b' '))	#test to identify the split
	var1 = (add1.split(b' ')[1]).decode() 	# temp variable to convert byte to string (variable 1 for 1st summation)
	var2 = (add1.split(b' ')[3]).decode()	# temp variable to convert byte to string (variable 2 for 1st summation)
print(var1+ " " + var2)		#test print statement var1 and var2
sum1 = int(var1) + int(var2)
print(sum1)

#Converts the sum1 int into a bytes variable
tempsum1 = bytes(str(sum1).encode())+ b'\n'


client_socket.send(tempsum1)	#send summation result to the server

##### Summation #2 ####
for k in add2:
	#print(add2.split(b' '))	#test to identify the split
	var3 = (add2.split(b' ')[1]).decode()	# temp variable to convert byte to string (variable 1 for 2nd summation)
	var4 = (add2.split(b' ')[3]).decode()	# temp variable to convert byte to string (variable 2 for 2nd summation)
print(var3+ " " + var4)		#test print statement var1 and var2
sum2 = int(var3) + int(var4)	#test print statement for summation result
print(sum2)

#Converts the sum2 int into a bytes variable
tempsum2 = bytes(str(sum2).encode()) + b'\n'


client_socket.send(tempsum2)	#send summation result to the server


##### Summation #3 ####
for l in add3:
	#print(add2.split(b' '))	#test to identify the split
	var5 = (add3.split(b' ')[1]).decode()
	var6 = (add3.split(b' ')[3]).decode()
print(var5+ " " + var6)		#test print statement var1 and var2
sum3 = int(var5) + int(var6)
print(sum3)

#Converts the sum3 int into a bytes variable
tempsum3 = bytes(str(sum3).encode()) + b'\n'


client_socket.send(tempsum3)	#send summation result to the server

client_socket.close() # close socket connection
