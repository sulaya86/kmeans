# README #

For this project, we are going to use the results obtained from a previous project (Data weekly update with cron). This data is already in a Database and correspond to the USD-NTD exchange rate retrieved from a bank website.[1]

### What is this repository for? ###

The goal of this project is to find groups in the data (clustering) implementing the K-Means Algorithm, and plot after achieves the result.

* Version 1.1

### What do you need to know?###

* Programming Language: 
  PHP and Javascript.

### What do you need to make the implementation possible? ###

**Tools:**

*    K-Means Algorith PHP Class: [PHP class jacobemerick/kmeans](https://github.com/jacobemerick/kmeans)

*    Visualizing K-Means Clustering: [Javascript Highcharts charting library](http://api.highcharts.com/highcharts/)
* A Data resource (Database): sql.txt file in the report can help.

Before continuing with the implementation, please take a look at the following [article about K-Means Algorithm Introduction](https://www.datascience.com/blog/introduction-to-k-means-clustering-algorithm-learn-data-science-tutorials.) [2], this will help you to have an idea about what clustering is without knowledge of machine learning.

### K-Means Implementation ###

1. The data source: You can use your own scraping data or use the sql.txt example in this repo.

2. Retrieve the data and create data set.

3. The Result: clusteringall.php file contains how to use the jacobemerick/kmeans [3].Because later will be required a JSON object so we store the results as a JSON object (centroids and clusters).

###Visualizing K-Means Clustering ###

Highchart Implementation Script: The results (centroids and clusters) are stored in different variables to add it to the highchart configuration. We are using Highcharts API please check the references. [4]

This is an example of the plotting.

![all.png](https://bitbucket.org/repo/LorRB56/images/3371934390-all.png)



### Dependencies ###
![Screen Shot 2017-05-25 at 11.50.56 AM.png](https://bitbucket.org/repo/LorRB56/images/153523577-Screen%20Shot%202017-05-25%20at%2011.50.56%20AM.png)

For further references of implementation please review the attached PDF file in the repo.


### Contribution guidelines ###

If you have any question regarding this implementation, correct english grammar mistakes, comments or would like to improve the code, please let me know.

### Who do I talk to? ###

* https://bitbucket.org/sulaya86/

### References ###

[1]"歡迎來到中央銀行全球資訊網 ─ 新臺幣/美元 銀行間收盤匯率", Cbc.gov.tw, 2017. [Online]. Available: http://www.cbc.gov.tw/lp.asp?CtNode=645&CtUnit=308&BaseDSD=32&mp=1&nowPag e=1&pagesize=50. [Accessed: 24- May- 2017].

[2]A. Trevino, "Introduction to K-means Clustering", Datascience.com, 2017. [Online]. Available: https://www.datascience.com/blog/introduction-to-k-means-clustering-algorithm-learn-data-science-tutorials. [Accessed: 24- May- 2017].

[3]"jacobemerick/kmeans", GitHub, 2017. [Online]. Available: https://github.com/jacobemerick/kmeans. [Accessed: 24- May- 2017].

[4]"Highcharts API Reference", Api.highcharts.com, 2017. [Online]. Available: http://api.highcharts.com/highcharts/. [Accessed: 24- May- 2017].