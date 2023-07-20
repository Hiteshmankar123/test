import os
import shutil 

print(os.getcwd())

total, used,  free = shutil.disk_usage("/") 
print("Total disk space is:", total // (2**30))
print("free disk space is:", used)
print("free disk space is:", free)