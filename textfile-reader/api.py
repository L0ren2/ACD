from flask import Flask
from flask_restful import Api, Resource

file_all_products = "Products.txt"

app = Flask(__name__)
api = Api(app)

class Product(Resource):
    def get(self):
        products = []
        quantity = []
        with open(file_all_products, "r") as file:
            lines = file.readlines()
            for line in lines:
                prod, quan = line.strip().split('-')
                products.append(prod)
                quantity.append(quan)
        return {
                'products' : products,
                'quantity' : quantity
        }

api.add_resource(Product, '/')

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=80, debug=True)

