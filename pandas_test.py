from __future__ import print_function

import pandas as pd
# print (pd.__version__)

# adding series
city_names = pd.Series(['San Francisco', 'San Jose', 'Sacramento'])
population = pd.Series([852469, 1015785, 485199])
# setting data frame
pd.DataFrame({ 'City name': city_names, 'Population': population })

#loading data from a source
california_housing_dataframe = pd.read_csv("https://download.mlcc.google.com/mledu-datasets/california_housing_train.csv", sep=",")
# print (california_housing_dataframe.describe())

# print (california_housing_dataframe.head())

print (california_housing_dataframe.hist('housing_median_age'))
