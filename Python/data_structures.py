list_of_num = []

list_of_num.append(1)
list_of_num.append(2)
list_of_num.append("Hitesh")
print (type(list_of_num))


list_of_cloud = ["aws","azure","gcp","oracle", "IBM"]
list_of_env = ["dev", "test","prod"]

# list iteration 
for cloud in list_of_cloud:
    if cloud =="aws":
     print("AWS is the best cloud")
     
# dictionary 
dict_of_cloud = {
    "aws":"Amazon Web Services",
    "azure": "Microsoft Azure",
    "gcp": "Google Cloud Platform"
}
print(dict_of_cloud["aws"])
print(dict_of_cloud.get("linode","Not found"))

dict_of_cloud.update({"linode":"linode cloud"})
     
print(dict_of_cloud["aws"])  
print(dict_of_cloud["azure"])
   