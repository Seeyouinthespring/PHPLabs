import React from 'react'
import { Link, graphql } from 'gatsby'
import Layout from '../components/layout'

const TeamTemplate = ({ data }) => (  
  <Layout>
    <h1>{data.strapiTeams.title}</h1>
    <p>Город: {data.strapiTeams.city}</p>
    <p>Дата основания: {data.strapiTeams.foundation}</p>
    <p>Стадион: {data.strapiTeams.arena_name}</p>
    <p>Состав:</p>
    {data.strapiTeams.players.map(document =>(
      <lu>
      <h5><Link to={`/Players_${document.id}`}>{document.surname} {document.name}</Link></h5>
      </lu>
      ))
    } 
    </Layout>
)
export default TeamTemplate
export const query = graphql`  
  query TeamTemplate($id: String) {
    strapiTeams(id: {eq: $id}){
      id
      title
      city
      foundation
      arena_name
        players{
          id
          name
          surname
        }
    }
  }
`