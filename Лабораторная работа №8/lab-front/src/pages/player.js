import React from 'react'
import { Link, graphql } from 'gatsby'
import Layout from '../components/layout'

const PlayerTemplate = ({ data }) => (  
  <Layout>
    <h1>{data.strapiPlayers.name} {data.strapiPlayers.surname}</h1>
    <p>Игровой номер: {data.strapiPlayers.play_number}</p>
    <p>Дата рождения: {data.strapiPlayers.birthdate}</p>
    <p>Вес: {data.strapiPlayers.weight}</p>
    <p>Рост: {data.strapiPlayers.height}</p>
    <p>Команда: <Link to={`/Teams_${data.strapiPlayers.team.id}`}>{data.strapiPlayers.team.title} </Link></p> 
  </Layout>
)
export default PlayerTemplate
export const query = graphql`  
  query PlayerTemplate($id: String) {
    strapiPlayers(id: {eq: $id}){
      name
      surname
      play_number
      birthdate
      weight
      height
      team{
        id
        title
      }
    }
  }
`