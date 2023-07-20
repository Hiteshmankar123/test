import os
import shutil 

print(os.getcwd())

total, used,  free = shutil.disk_usage("/") 
print("")