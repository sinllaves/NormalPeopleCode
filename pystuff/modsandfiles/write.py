# f = open('empty.txt', 'w')
# f.write('This is another content')
# f.close()

import numpy
import matplotlib.pyplot as plt

x = numpy.random.uniform(0.0, 5.0, 100000)

plt.hist(x, 100)
plt.show()
