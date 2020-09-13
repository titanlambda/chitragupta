import enum

import flask
from aws_enum import get_assets
import json

app = flask.Flask(__name__)
app.config["DEBUG"] = True


@app.route('/', methods=['GET'])
def home():
    return "Error: Method not allowed."


@app.route('/aws_assets', methods=['GET'])
def aws_assets():
    assets = get_assets()
    # json_format = json.dumps(assets)
    return assets


if __name__ == "__main__":
    app.run(debug=True, host='0.0.0.0', port=8080)
