## Author: Owen Lyons
## Date: 08/09/17
## Program desc: Pansy website login test


from selenium import webdriver
import time as t

# specify path of the geckodriver
driver = webdriver.Firefox(executable_path=r'C:\SeleniumGecko\geckodriver.exe')
driver.get("http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php")

# find the products button and click it
products = driver.find_element_by_xpath("//*[contains(text(), 'Products')]")
products.click()

t.sleep(5) # sleep for 5 seconds to allow the page to load fully

# find the rose image and click it
rose = driver.find_element_by_xpath("//img[contains(@src,'images/red-rose.jpg')]")
rose.click()

# find add to cart button and click it
cart = driver.find_element_by_id("cart-btn")
cart.click()


# Before closing the driver sleep for 10 seconds to show that the test was successful
t.sleep(10)

assert "No results found." not in driver.page_source

driver.close()