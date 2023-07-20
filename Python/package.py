import os
import shutil 

print(os.getcwd())

total, used,  free = shutil.disk_usage("/") 
print("Total disk space is:", total)
print("free disk space is:", free)