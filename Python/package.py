import os
import shutil 

print(os.getcwd())

total, used,  free = shutil.disk_usage("/") 
print("Total disk space is:" {total // (2**30)} GB")
print("free disk space is:", {used // (2**30)} GB")
print("free disk space is:", {free // (2**30)} )