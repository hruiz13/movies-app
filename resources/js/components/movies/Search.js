import React, { useState } from 'react'
import ReactDOM from 'react-dom';

const op = [
    { Title: 'Spain RP' }
]

const findMovie = async (string) => {
    return new Promise((resolve, reject) => {
        fetch(`http://www.omdbapi.com/?i=tt0133093&apikey=2015a572&s=${string}`)
            .then(res => {
                res.json().then(resp => {
                    resolve(resp.Search)
                })
            })
            .catch(err => {
                console.log(err)
                reject({ Search: 'Error, try again later' })
            })

    })
}

const Search = () => {
    const [options, setOptions] = useState([]);
    const [search, setSearch] = useState('')
    const [show, setShow] = useState(true)

    const handleChange = (e) => {
        setSearch(e.target.value)
    }

    const handleSearch = () => {
        findMovie(search).then(res => {
            setOptions(res)
        })
    }

    return (
        <div className="flex column mt-5">
            <div className="ml-5 h-8">
                <input className="h-25 w-60 min-h-full placeholder-gray-800" onChange={handleChange} placeholder="Search movie/serie" />

                {
                    show &&
                    <ul className="search1 w-60 text-gray-800 ">
                        {
                            options?.map((option, key) => {
                                return (
                                    <li key={key} className="text-gray-800 hover:bg-purple-400 cursor-pointer">
                                        {option.Title}
                                    </li>
                                )
                            })
                        }
                    </ul >
                }
            </div >
            <div>
                <button type="button" onClick={handleSearch} className="py-1 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-600 focus:ring-offset-purple-300 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                    Search
               </button>
            </div>
        </div>
    )
}


if (document.getElementById('search')) {
    ReactDOM.render(<Search />, document.getElementById('search'));
}