import React from 'react'
import { Link, graphql } from 'gatsby'
import Layout from '../components/layout'

const MatchTemplate = ({ data }) => (  
  <Layout>
    <h1>{data.strapiMatches.id}</h1>
    <p>Дата: {data.strapiMatches.date}</p>
    <p>Время: {data.strapiMatches.time}</p>
    {data.strapiMatches.partisipants.map(document =>(
      <div>
      <h5><Link to={`/Teams_${document.id}`}>{document.title}   </Link></h5>
      </div>
      ))
    }
    <p>Результат: {data.strapiMatches.result}</p>
  </Layout>
)
export default MatchTemplate
export const query = graphql`  
  query MatchTemplate($id: String) {
    strapiMatches(id: {eq: $id}){
      id
      date
      time
      ended
      result
      partisipants{
        id
        title
      }
    }
  }
`