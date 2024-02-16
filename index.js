const {Client} = require('pg')
const client = new Client({
    user: "postgres",
    password: "postgres",
})