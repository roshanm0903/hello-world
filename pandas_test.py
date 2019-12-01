from __future__ import print_function

import pandas as pd
# print (pd.__version__)

import numpy as np

# adding series
city_names = pd.Series(['San Francisco', 'San Jose', 'Sacramento'])
population = pd.Series([852469, 1015785, 485199])
# setting data frame
pd.DataFrame({ 'City name': city_names, 'Population': population })

#loading data from a source
california_housing_dataframe = pd.read_csv("https://download.mlcc.google.com/mledu-datasets/california_housing_train.csv", sep=",")
# print (california_housing_dataframe.describe())

# print (california_housing_dataframe.head())

# print (california_housing_dataframe.hist('housing_median_age'))


cities = pd.DataFrame({ 'City name': city_names, 'Population': population })
# print(type(cities['City name'][1]))

# accessing particular element in a multi-dimentional array
# print(cities['City name'][1])

# returns table with index 0 to 2
# print(cities[0:2])


# cities['population_check'] = population.apply(lambda val: val > 1000000)

# cities['Area square miles'] = pd.Series([46.87, 176.53, 97.92])
# cities['Population density'] = cities['Population'] / cities['Area square miles']

# cities['Is wide and has saint name'] = (cities['Area square miles'] > 50) & cities['City name'].apply(lambda name: name.startswith('San'))


print(cities.reindex([2,0, 1]))
#randomize index
# print(cities.reindex(np.random.permutation(cities.index)))

print(cities)