from selenium import webdriver
import time as t

driver = webdriver.Firefox(executable_path=r'C:\SeleniumGecko\geckodriver.exe')
driver.get("http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php")

login = driver.find_element_by_xpath("//*[contains(text(), 'Login')]")
login.click()

t.sleep(5)

email = driver.find_element_by_id("email")
email.send_keys("test@gmail.com")

password = driver.find_element_by_id("password")
password.send_keys("test")

submit = driver.find_element_by_id("submit")
submit.click()

t.sleep(10)

assert "No results found." not in driver.page_source

driver.close()
